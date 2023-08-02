<x-layout title="create contact">


    <form action="{{ route('contact.store') }}" class="form" method="post">
        @csrf
        <div class="group">
            <label for="">First Name</label>
            <input value="{{old('first_name')}}" type="text" name="first_name">
            <br>
            <small>{{ $errors->first('name') }}</small>
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input value="{{old('surname')}}" type="text" name="surname">
            <br>
            <small>{{ $errors->first('surname') }}</small>
        </div>
        <div class="group">
            <label for="">Eamil</label>
            <input value="{{old('email')}}" type="email" name="email">
            <br>
            <small>{{ $errors->first('email') }}</small>
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input value="{{old('birthday')}}" type="date" name="birthday">
            <br>
            <small>{{ $errors->first('birthday') }}</small>
        </div>
        <div class="group">
            <label for="">Company</label>
            <input value="{{old('company')}}" type="text" name="company">
            <br>
            <small>{{ $errors->first('company') }}</small>
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input value="{{old('job_title')}}" type="text" name="job_title">
            <br>
            <small>{{ $errors->first('job_title') }}</small>
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <input value="{{old('phone_number')}}" type="number" name="phone_number">
            <br>
            <small>{{ $errors->first('phone_number') }}</small>
        </div>
        <div class='button'>
            <button type="submit">save</button>
        </div>
    </form>
</x-layout>
