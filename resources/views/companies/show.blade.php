<x-layout>
    <h1>{{$company->name}}</h1>
    <ul class="list-group">
        @foreach($company->products->sortBy('weight') as $product)
            <li class="list-group-item">{{$product->name}}</li>
        @endforeach
    </ul>
</x-layout>
