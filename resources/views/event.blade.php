<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="{{$event['styleClass']}} rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
    @if(!isset($event['multiday']) || $event['multiday'] !== true)
        <p class="mt-0 text-xs">
            {{$event['date']->format('G:i')}} - {{$event['end']->format('G:i')}}
        </p>
    @endif

    @if(isset($event['description']) && strlen($event['description'] > 0))
        <p class="mt-2 text-xs">
            {{ $event['description'] ?? 'No description' }}
        </p>
    @endif
</div>
