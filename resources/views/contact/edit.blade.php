<x-layout title="create contact">
    <style>
        form {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        form .group {
            padding-bottom: 30px;
        }

        form .group label {
            font-size: 22px;
            color: #666;
            width: 150px;
            font-weight: normal;
        }

        input {
            border: noen;
            border: none;
            background: #80808030;
            padding: 8px;
            border-radius: 5px;
            outline: none;
            color: blue;
            transition: 0.2s;
            width: 250px;
            border: 2px solid transparent;
        }

        input:focus {
            border: 2px solid blue;
        }

        button {
            border: 2px solid blue;
            padding: 5px;
            border-radius: 5px;
            width: 80px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            color: blue;
        }

        small {
            color: red;
        }
    </style>

    {{ $errors }}

    <form action="{{ route('contact.update',$contact->id) }}" class="form" method="post">
        @csrf
        @method('put')
        <div class="group">
            <label for="">First Name</label>
            <input type="text" value="{{$contact->first_name}}" name="first_name">
            <br>
            <small>{{ $errors->first('name') }}</small>
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input type="text" value="{{$contact->surname}}" name="surname">
        </div>
        <div class="group">
            <label for="">Eamil</label>
            <input type="email" value="{{$contact->email}}" name="email">
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input type="date" value="{{$contact->birthday}}" name="birthday">
        </div>
        <div class="group">
            <label for="">Company</label>
            <input type="text" value="{{$contact->company}}" name="company">
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input type="text" value="{{$contact->job_title}}" name="job_title">
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <input type="number" value="{{$contact->phone_number}}" name="phone_number">
        </div>
        <div class=>
            <button type="submit">update</button>
        </div>
    </form>
</x-layout>
