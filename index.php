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
</head>
<div class="container">
    <div class="row">

        <div class="col-md-10 border shadow-sm ms-4 mt-5 ps-3 py-5 bg-white">
            <form method="" action="store">
                @csrf
                <input type="text" placeholder="Pet name" name="petname">
                <div class="status">
                    <button class="btn btn-secondary dropdown-toggle mt-2 mb-2" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Status
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Good</a></li>
                        <li><a class="dropdown-item" href="#">Normal</a></li>
                        <li><a class="dropdown-item" href="#">Bad</a></li>
                    </ul>
                </div>
                <input type="text" placeholder="Pawrent" name="pawrent">
                <div class="Breed">
                    <button class="btn btn-secondary dropdown-toggle mt-2 mb-2" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Breed
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Beagle</a></li>
                        <li><a class="dropdown-item" href="#">Spaniel</a></li>
                        <li><a class="dropdown-item" href="#">Golden</a></li>
                    </ul>
                </div>
                <input type="radio" placeholder="male" value="male" name="gender">
                <label for="male">Male</label>
                <input type="radio" placeholder="female" value="female" name="gender">
                <label for="female">Female</label><br>
                <input type="text" placeholder="Contact" name="contact">
                <input type="text" placeholder="Address" name="address">
                <input type="date" placeholder="date of birth" name="DOB">
                <div class="City">
                    <button class="btn btn-secondary dropdown-toggle mt-2 mb-2" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        City
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Yangon</a></li>
                        <li><a class="dropdown-item" href="#">Mandalay</a></li>
                        <li><a class="dropdown-item" href="#">Bago</a></li>
                    </ul>
                </div>
                <div class="Township">
                    <button class="btn btn-secondary dropdown-toggle mt-2 mb-2" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        township
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Yankin</a></li>
                        <li><a class="dropdown-item" href="#">Okklapa</a></li>
                        <li><a class="dropdown-item" href="#">Thuwana</a></li>
                    </ul>
                </div>
                <button class="btn bg-success mt-2">Save</button>
                <button class="btn bg-danger mt-2">Cancle</button>
            </form>
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
                <tr>
                    <td>B-0025</td>
                    <td>Milo</td>
                    <td>Status</td>
                    <td>Pink Pink</td>
                    <td>Beagle</td>
                    <td>Male</td>
                    <td>1.5.2021</td>
                    <td>09797122499</td>
                    <td>No412,yankin,Yangon</td>
                    <td><a>edit</a></td>
                    <td><a>delete</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<body>

</body>

</html>