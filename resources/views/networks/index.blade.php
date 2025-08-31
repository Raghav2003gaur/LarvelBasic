<x-layout> 
    <h2>Currently available Networks</h2>

    <ul>
       @foreach($networks as $network)
        <li>
           <x-card  
               :href="route('networks.show', $network->id)" 
               :highlight="$network->skill > 70" >
               
              <div class="">
                <h3>{{ $network->name }}</h3>
                <p>{{$network->dojo->name}} </p>
              </div>
           </x-card>
        </li>
       @endforeach
    </ul>

   {{$networks->links()}}
</x-layout>
