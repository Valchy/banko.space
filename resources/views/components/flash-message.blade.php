@if ($message = Session::get('success'))
    <div class="block mt-6">
        <div class="bg-lime-500 inline p-4 text-white rounded">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="block mt-6">
        <div class="bg-red-500 inline p-4 rounded">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="block mt-6">
        <div class="bg-orange-500 inline p-4 rounded">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="block mt-6">
        <div class="bg-blue-500 inline p-4 text-white rounded">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="block mt-6">
        <div class="bg-red-500 inline p-4 rounded">
            Please check the form below for errors
        </div>
    </div>
@endif