<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Avatar</h2>
                    <img src="{{Auth::user()->getMedia()[0]->getFullUrl()}}" width="200px" />
                    <form action="{{asset('dashboard')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <textarea name="about" placeholder="About you" class="form-control">{{Auth::user()->profiles->about}}</textarea>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="picture" type="file" id="formFile">
                        </div>
                        <div class="col-auto">
                            <input type="submit" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
