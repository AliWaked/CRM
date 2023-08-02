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

    <form class="form">
        <div class="group">
            <label for="">First Name</label>
            <input type="text" disabled value="{{$contact->first_name}}" name="first_name">
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input disabled type="text" value="{{$contact->surname}}" name="surname">
        </div>
        <div class="group">
            <label for="">Eamil</label>
            <input disabled type="email" value="{{$contact->email}}" name="email">
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input disabled type="date" value="{{$contact->birthday}}" name="birthday">
        </div>
        <div class="group">
            <label for="">Company</label>
            <input disabled type="text" value="{{$contact->company}}" name="company">
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input disabled type="text" value="{{$contact->job_title}}" name="job_title">
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <input disabled type="number" value="{{$contact->phone_number}}" name="phone_number">
        </div>
    </form>
</x-layout>
