@extends("index")
@section("tittle")
Anasayfa
@endsection

@section("headArea")
@endsection

@section("content")
    <main class="flex flex-wrap gap-20 justify-around container content-around mx-auto bg-neutral-50 p-8 shadow-lg shadow-neutral-500/40 my-6">
        @foreach($users as $user)
{{--            @dd($user)--}}
            <div class="max-w-sm flex flex-col rounded-lg overflow-hidden bg-white shadow-2xl">
                <!-- card cover -->
                <img class="h-56 w-full object-cover"
                     src="https://ui-avatars.com/api/?name={{ $user->name }}&size=384x256"
                     alt="" />
                <!-- end card cover -->

                <!-- card content -->
                <div class="flex-1 px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $user->name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $user->email }}
                    </p>
                </div>
                <!-- end card content -->

                <!-- card footer -->
                <div class="px-6 py-4 bg-gray-100">
                    <button type="button" class="bg-blue-600 hover:bg-blue-700 py-2 px-4 text-sm font-medium text-white border border-transparent rounded-lg focus:outline-none w-full">Güncelle</button>
                </div>
                <!-- end card footer -->
            </div>
        @endforeach

    </main>
@endsection
@section("footer")
@endsection
