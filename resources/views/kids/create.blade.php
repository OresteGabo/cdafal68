@extends('layouts.layout')
@section('content')
    <p>This is adherents index</p>
@endsection
@section('more_data')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire des enfants'])
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" class="form-control" required>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="isHandicapped" name="isHandicapped" class="form-check-input">
                        <label for="isHandicapped" class="form-check-label">Is Handicapped</label>
                    </div>

                    <div class="form-group">
                        <label for="parentId">Parent Name:</label>
                        <select id="parentId" name="parentId" class="form-control" required>
                            <option value="">Select Parent</option>
                            @foreach ($parents as $parent) {
                                <option value="{{ $parent->id }}">{{ $parent->first_name }}</option>
                            }
                            @endforeach


                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
