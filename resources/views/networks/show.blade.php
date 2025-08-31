<x-layout>
  <h2>{{ $network->name }}'s Profile</h2>

   
  <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $network->skill }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $network->bio }}</p>
  </div>

  {{-- dojo info --}}
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo name:</strong> {{ $network->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $network->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p>{{ $network->dojo->description }}</p>
  </div>

</x-layout>