<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SmokeTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_render(): void
    {
        Event::create([
            'name' => 'Atelier mandala',
            'description' => 'Description',
            'date' => '2026-09-15',
            'price' => '25',
            'location' => 'Rennes',
            'location_url' => null,
            'external_url' => null,
            'external_url_title' => null,
            'image' => '/storage/events/test.jpg',
            'image_alt' => 'Photo',
            'is_published' => true,
        ]);

        foreach (['/', '/particuliers', '/structures', '/mentions-legales', '/login', '/forgot-password', '/up'] as $uri) {
            $this->get($uri)->assertStatus(200);
        }

        $this->get('/cours-de-flute-traversiere')->assertRedirect('/');
    }

    public function test_back_office_pages_render(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/dashboard')->assertStatus(200);
        $this->actingAs($user)->get('/user/profile')->assertStatus(200);
        $this->actingAs($user)->get('/events')->assertStatus(200);
        $this->actingAs($user)->get('/events/create')->assertStatus(200);

        $event = Event::create([
            'name' => 'Atelier', 'description' => 'D', 'date' => '2026-09-15', 'price' => '25',
            'location' => 'Rennes', 'location_url' => null, 'external_url' => null,
            'external_url_title' => null, 'image' => '/storage/events/test.jpg', 'image_alt' => 'A', 'is_published' => true,
        ]);

        $this->actingAs($user)->get('/events/'.$event->id.'/edit')->assertStatus(200);
    }

    public function test_event_image_upload_targets_the_public_disk(): void
    {
        Storage::fake('public');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/events', [
            'name' => 'Atelier', 'description' => 'D', 'date' => '2026-09-15', 'price' => '25',
            'location' => 'Rennes', 'location_url' => null, 'external_url' => null,
            'external_url_title' => null, 'image' => UploadedFile::fake()->create('photo.jpg', 10, 'image/jpeg'),
            'image_alt' => 'A', 'is_published' => 1,
        ]);

        $response->assertRedirect(route('events.index'));

        $event = Event::firstOrFail();

        $this->assertStringStartsWith('http', $event->image);
        $this->assertStringContainsString('/storage/events/', $event->image);
        Storage::disk('public')->assertExists('events/'.basename($event->image));
    }
}
