<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="">
                 
                    <h1>Hello</h1>



                    @can('isAdmin')
                        <h3> here is admin </h3>

                        <a href="{{ route("gate")}}" class="btn btn-info">Check it</a>
                    @endcan


                    @can('isUser')
                        <h3> here is user </h3>

                        <a href="{{ route("gate")}}" class="btn btn-info">Check it</a>
                    @endcan

                    @can('isEditor')
                        <h3> here is editor </h3>

                        <a href="{{ route("post.index")}}" class="btn btn-info">Check it</a>
                    @endcan



                </div>


                
            </div>
        </div>
    </div>
</x-app-layout>
