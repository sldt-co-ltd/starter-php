<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Carbon\Carbon;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Storage;

class SchedulerTest extends TestCase
{
    public function testHandleException()
    {
        $schedule = app()->make(\Illuminate\Console\Scheduling\Schedule::class);
        $this->assertNotNull($schedule);

        $signature = 'emit:exception';
        $events = collect($schedule->events())->filter(function (\Illuminate\Console\Scheduling\Event $event) use ($signature) {
            return stripos($event->command, $signature);
        });

        if ($events->count() == 0) {
            $this->fail('No events found');
        }

        $output_file = 'test.out';
        Storage::delete($output_file);

        $this->artisan('schedule:run');
        $this->app[Kernel::class]->setArtisan(null);

        $output = Storage::get($output_file);

        $this->assertStringContainsString('Not implemented', $output);
    }
}
