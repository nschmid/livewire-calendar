<div class="flex-1 h-12 border -mt-px -ml-px flex items-center justify-center bg-indigo-100 text-gray-900"
     style="min-width: {{$minWidth}};">

    <p class="text-sm">
{{--        {{ $day->format('l') }}--}}
        {{ ucfirst($day->isoFormat('dddd')) }}
    </p>

</div>
