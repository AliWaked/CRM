<x-layout title="create contact">


    <form action="{{ route('contact.store') }}" class="form" method="post">
        @csrf
        <div class="group">
            <label for="">First Name</label>
            <input type="text" name="first_name">
            <br>
            <small>{{ $errors->first('name') }}</small>
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input type="text" name="surname">
            <br>
            <small>{{ $errors->first('surname') }}</small>
        </div>
        <div class="group">
            <label for="">Eamil</label>
            <input type="email" name="email">
            <br>
            <small>{{ $errors->first('email') }}</small>
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input type="date" name="birthday">
            <br>
            <small>{{ $errors->first('birthday') }}</small>
        </div>
        <div class="group">
            <label for="">Company</label>
            <input type="text" name="company">
            <br>
            <small>{{ $errors->first('company') }}</small>
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input type="text" name="job_title">
            <br>
            <small>{{ $errors->first('job_title') }}</small>
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <input type="number" name="phone_number">
            <br>
            <small>{{ $errors->first('phone_number') }}</small>
        </div>
        <div class='button'>
            <button type="submit">save</button>
        </div>
    </form>
</x-layout>
