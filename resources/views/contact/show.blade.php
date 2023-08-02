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
        @if ($contact->avatar)
            <img src="{{ asset('assets/images/team-4.jpg') }}" style="cursor: default; margin-bottom:40px;" alt=""
                onclick="document.getElementById('section.change-avatar').classList.remove('hidden')">
        @else
            <div class="icon" style="cursor: default;">
                <label for="avatar"><i class="fas fa-user"></i></label>
            </div>
        @endif
        <div class="group">
            <label for="">First Name</label>
            <input type="text" disabled value="{{ old('first_name', $contact->first_name) }}" name="first_name">
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input disabled type="text" value="{{ old('surname', $contact->surname) }}" name="surname">
        </div>
        <div class="group">
            <label for="">Email</label>
            <select name="email" id="email">
                @foreach ($contact->email as $i => $email)
                    <option value="">{{ $email }}</option>
                @endforeach
            </select>
        </div>
        <div class="group">
            <label for="">Gender</label>
            <select name="gender" id="gender">
                <option value="male" @selected('male' == $contact->gender)>Male</option>
                <option value="female" @selected('female' == $contact->gender)>Female</option>
            </select>
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input disabled type="date" value="{{ old('birthday', $contact->birthday) }}" name="birthday">
        </div>
        <div class="group">
            <label for="">Company</label>
            <input disabled type="text" value="{{ old('company', $contact->company) }}" name="company">
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input disabled type="text" value="{{ old('job_title', $contact->job_title) }}" name="job_title">
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <select name="email" id="email">
                @foreach ($contact->phone_number as $i => $phone_number)
                    <option value="">{{ $phone_number }}</option>
                @endforeach
            </select>
        </div>
    </form>
</x-layout>
