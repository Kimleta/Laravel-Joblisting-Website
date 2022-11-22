@extends('layout')

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="text-center">Create Listing</h2>
            <br>

            <form method="POST" action="/listings">
                @csrf
                <div class="form-group row">
                    <label for="company" class="col-4 col-form-label">Company Name</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="company" name="company" placeholder="Company Name" type="text"
                                class="form-control" required>
                            @error('company')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div><br>
                <div class="form-group row">
                    <label for="title" class="col-4 col-form-label">Job Title</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="title" name="title" placeholder="Example : Senior Javascript Developer"
                                type="text" class="form-control" required>
                            @error('title')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div><br>
                <div class="form-group row">
                    <label for="location" class="col-4 col-form-label">Job Location</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="location" name="location" placeholder="Example : Budapest" type="text"
                                class="form-control" required>
                            @error('location')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div><br>
                <div class="form-group row">
                    <label for="website" class="col-4 col-form-label">Website URL</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="website" name="website" placeholder="URL" type="text" class="form-control" required>
                            @error('website')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="email" name="email" placeholder="URL" type="text" class="form-control" required>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="tags" class="col-4 col-form-label">Tags</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="tags" name="tags"
                                placeholder="Example : Laravel, Backend, Postgress, MySQL, etc" type="text"
                                class="form-control" required> 
                            @error('tags')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div><br>
                <div class="form-group row">
                    <label for="description" class="col-4 col-form-label">Job Description</label>
                    <div class="col-8">
                        <textarea id="description" name="description" placeholder="Include tasks, requirements, salary, etc"
                            type="text" class="form-control" required> </textarea>
                        @error('description')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                </div> <br>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Create Listing</button>
                    </div>
                </div><br>
            </form>
        </div>
    </div>
@endsection
