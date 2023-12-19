<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MayClinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-10 border shadow-sm ms-4 mt-5 ps-3 py-5 bg-white">

                {{-- update --}}
                @if(isset($data))
                <form method="POST" action="{{$data->id}}">
                    @csrf
                    <input type="text" placeholder="Pet name" name="name" value="{{$data->name}}">
                    <div class="status">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Good" {{ $data->status == 'Good' ? 'selected' : '' }}>Good</option>
                            <option value="Normal" {{ $data->status == 'Normal' ? 'selected' : '' }}>Normal</option>
                            <option value="Bad" {{ $data->status == 'Bad' ? 'selected' : '' }}>Bad</option>
                            </select>
                    </div>
                    <input type="hidden" name="selectedStatus" id="selectedStatus" value="{{$data->status}}">

                    <input type="text" placeholder="Pawrent" name="pawrent" value="{{$data->pawrent}}">
                    <div class="breed">
                        <label for="breed">breed</label>
                        <select name="breed" id="breed" class="form-control">
                            <option value="beagle" {{ $data->breed == 'beagle' ? 'selected' : '' }}>beagle</option>
                            <option value="spaniel" {{ $data->breed == 'spaniel' ? 'selected' : '' }}>spaniel</option>
                            <option value="golden" {{ $data->breed == 'golden' ? 'selected' : '' }}>golden</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedBreed" id="selectedBreed" value="{{$data->breed}}">

                    <div class="gender" >Gender
                        <input type="radio" placeholder="male" value="male" name="gender" {{ $data->gender == 'male' ? 'checked' : '' }}>
                        <label for="male">Male</label>
                        <input type="radio" placeholder="female" value="female" name="gender" {{ $data->gender == 'female' ? 'checked' : '' }}">
                        <label for="female">Female</label><br>
                    </div>

                    <input type="text" placeholder="Contact" name="contact" value="{{$data->contact}}">
                    <input type="text" placeholder="Address" name="address" value="{{$data->address}}">
                    <input type="date" placeholder="date of birth" name="DOB"value="{{$data->dob}}">
                    <div class="city">
                        <label for="city">city</label>
                        <select name="city" id="city" class="form-control">
                            <option value="yangon" {{ $data->city == 'yangon' ? 'selected' : '' }}>yangon</option>
                            <option value="mandalay" {{ $data->city == 'mandalay' ? 'selected' : '' }}>mandalay</option>
                            <option value="bago" {{ $data->city == 'bago' ? 'selected' : '' }}>bago</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedCity" id="selectedCity" value="{{$data->city}}">

                    <div class="township">
                        <label for="township">township</label>
                        <select name="township" id="township" class="form-control">
                            <option value="dagon" {{ $data->township == 'dagon' ? 'selected' : '' }}>dagon</option>
                            <option value="yakin" {{ $data->township == 'yakin' ? 'selected' : '' }}>yakin</option>
                            <option value="hlaing" {{ $data->township == 'hlaing' ? 'selected' : '' }}>hlaing</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedTownship" id="selectedTownship" value="{{$data->township}}">

                    <button " class="btn bg-success mt-2">update</button>
                    <button class="btn bg-danger mt-2">Cancle</button>
                </form>
                @else
                {{-- create --}}
                <form method="POST" action="store">
                    @csrf
                    <input type="text" placeholder="Pet name" name="name">
                    <div class="status">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Good" >Good</option>
                            <option value="Normal" >Normal</option>
                            <option value="Bad" >Bad</option>
                            </select>
                    </div>
                    <input type="hidden" name="selectedStatus" id="selectedStatus" value="">

                    <input type="text" placeholder="Pawrent" name="pawrent">
                    <div class="breed">
                        <label for="breed">breed</label>
                        <select name="breed" id="breed" class="form-control">
                            <option value="beagle" >beagle</option>
                            <option value="spaniel" >spaniel</option>
                            <option value="golden" >golden</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedBreed" id="selectedBreed" value="">

                    <div class="gender" >Gender
                        <input type="radio" placeholder="male" value="male" name="gender">
                        <label for="male">Male</label>
                        <input type="radio" placeholder="female" value="female" name="gender">
                        <label for="female">Female</label><br>
                    </div>

                    <input type="text" placeholder="Contact" name="contact">
                    <input type="text" placeholder="Address" name="address">
                    <input type="date" placeholder="date of birth" name="DOB">
                    <div class="city">
                        <label for="city">city</label>
                        <select name="city" id="city" class="form-control">
                            <option value="yangon" >yangon</option>
                            <option value="mandalay" >mandalay</option>
                            <option value="bago" >bago</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedCity" id="selectedCity" value="">

                    <div class="township">
                        <label for="township">township</label>
                        <select name="township" id="township" class="form-control">
                            <option value="dagon" >dagon</option>
                            <option value="yakin" >yakin</option>
                            <option value="hlaing" >hlaing</option>
                        </select>

                    </div>
                    <input type="hidden" name="selectedTownship" id="selectedTownship" value="">

                    <button type="submit" class="btn bg-success mt-2">Save</button>
                    <button class="btn bg-danger mt-2">Cancle</button>
                </form>
                @endif
            </div>
            <div class="col-md-1 mt-5">
                <button class="btn bg-primary">add</button>
            </div>
            <div class="col-md-12 mt-5">
                <table class="table table-bordered table-striped mt-3">
                    <tr>
                        <th>Id</th>
                        <th>Pet Name</th>
                        <th>Status</th>
                        <th>Paw Rent</th>
                        <th>Breed</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Contact Phone No</th>
                        <th>Address</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                    @foreach($datas as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->pawrent}}</td>
                        <td>{{$data->breed}}</td>
                        <td>{{$data->gender}}</td>
                        <td>{{$data->dob}}</td>
                        <td>{{$data->contact}}</td>
                        <td>{{$data->address.', '.$data->city.', '.$data->township}}</td>
                        <td><a href="{{url('edit/'.$data->id)}}" class="btn btn-primary">edit</a></td>
                        <td><a href="delete/{{$data->id}}" class="btn btn-danger">delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


{{-- <script>
    $(document).ready(function () {
        $('.dropdown-status').click(function () {
            var selectedStatus = $(this).data('status');
            $('.statusdropdown').text(selectedStatus);
            $('#selectedStatus').val(selectedStatus);
        });
    });
    $(document).ready(function () {
        $('.dropdown-breed').click(function () {
            var selectedBreed = $(this).text();
            $('.breeddropdown').text(selectedBreed);
            $('#selectedBreed').val(selectedBreed);
        });
    });
    $(document).ready(function () {
        $('.dropdown-city').click(function () {
            var selectedCity = $(this).text();
            $('.citydropdown').text(selectedCity);
            $('#selectedCity').val(selectedCity);
        });
    });
    $(document).ready(function () {
        $('.dropdown-tsp').click(function () {
            var selectedTownship = $(this).text();
            $('.tspdropdown').text(selectedTownship);
            $('#selectedTownship').val(selectedTownship);
        });
    });

</script> --}}
</body>

</html>
