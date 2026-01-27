<x-layout>
    <h1>Companies</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->address}}</td>
                <td>
                    <form action="{{route('companies.destroy', $company)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deleted as $company)
            <tr>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->address}}</td>
                <td>
                    <form action="{{route('companies.destroy', $company)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
