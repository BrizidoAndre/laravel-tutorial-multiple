<x-layout>
    <h1>Products</h1>
    <form method="post">
        @csrf
        <div class="mb-3">
            <label for="gtin" class="form-label">GTIN</label>
            <input type="text" class="form-control" name="GTIN" id="gtin" value="{{old('GTIN')}}">
            @error('GTIN')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
            @error('name')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" class="form-control" name="weight" id="weight" value="{{old('weight')}}">
            @error('weight')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="value" class="form-label">Value</label>
            <input type="text" class="form-control" name="value" id="value" value="{{old('value')}}">
            @error('weight')
            <p class="text-error">
                {{$message}}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="company_id">Companies</label>
            <select name="company_id" id="company_id" class="form-select">
                @foreach(App\Models\Companies::all() as $company)
                    <option @selected(old('company_id', ) == $company->id) value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
            @error('company_id')
            <p class="text-error">{{$message}}</p>
            @enderror
        </div>
        <button class="btn btn-primary">Submit</button>

    </form>
</x-layout>
