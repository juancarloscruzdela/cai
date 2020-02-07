
                <div class="card">
                    <div class="card-header">{{ __('Student Form') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="/multi-action">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="studentId" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="studentId" type="number" class="form-control @error('studentId') is-invalid @enderror" name="studentId" value="{{ $student[0]->id }}" required autocomplete="studentId" autofocus>
    
                                    @error('studentId')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ $student[0]->firstName }}" required autocomplete="firstName" autofocus>
    
                                    @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="middleName" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="middleName" type="text" class="form-control @error('middleName') is-invalid @enderror" name="middleName" value="{{ $student[0]->middleName }}" required autocomplete="middleName" autofocus>
    
                                    @error('middleName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $student[0]->lastName }}" required autocomplete="lastName" autofocus>
    
                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row" style="display:none;">
                                <label for="accountType" class="col-md-4 col-form-label text-md-right">{{ __('accountType') }}</label>
    
                                <div class="col-md-6">
                                    <input id="accountType" type="number" value="0"class="form-control @error('accountType') is-invalid @enderror" name="accountType" value="{{ old('accountType') }}" required autocomplete="accountType" autofocus>
    
                                    @error('accountType')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
    
                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $student[0]->age }}" required autocomplete="age" autofocus>
    
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="grade" class="col-md-4 col-form-label text-md-right">{{ __('Grade') }}</label>
    
                                <div class="col-md-6">
                                    <input id="grade" type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ $student[0]->grade }}" required autocomplete="grade" autofocus>
    
                                    @error('grade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Section') }}</label>
    
                                <div class="col-md-6">
                                    <input id="section" type="text" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ $student[0]->section }}" required autocomplete="section" autofocus>
    
                                    @error('section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
    
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $student[0]->username }}" required autocomplete="username" autofocus>
    
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $student[0]->password }}" name="password" autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $student[0]->password }}" autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" name="action" value="add">Add</button>
                                    <button type="submit" class="btn btn-primary" name="action" value="save">Save</button>
                                    <button type="submit" class="btn btn-primary" name="action" value="delete">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>