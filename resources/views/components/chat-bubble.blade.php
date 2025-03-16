<div class="d-flex {{ $isSender ? 'justify-content-end' : 'justify-content-start' }} mb-2">
    <div class="p-3 rounded shadow-sm" style="max-width: 60%; background-color: {{ $isSender ? '#800020' : '#FFFFF0' }}; color: {{ $isSender ? 'white' : 'black' }};">
        <p class="m-0">{{ $message }}</p>
    </div>
</div>
