<x-layout title="create contact">
    <form action="{{ route('contact.store') }}" class="form" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" accept="image/*" name="avatar" id="avatar" hidden>
        {{-- @if ($contact->avatar) --}}
        <div class="avatar-image hidden" id="image_avatar" style="position: relative">
            <img src="{{ asset('assets/images/team-4.jpg') }}" id="avatar_image" alt=""
                onclick="document.getElementById('section.change-avatar').classList.remove('hidden')">
            <label for="avatar"><i class="fa-regular fa-pen-to-square"></i></label>
            <i class="fa-solid fa-trash-can remove-avatar" id="remove-avatar" onclick="removeImage()"
                style="
                 
            "></i>
        </div>
        {{-- @else --}}
        <div class="icon"  id="avatar_image_default">
            <label for="avatar" style="cursor: pointer"><i class="fas fa-user"></i></label>
        </div>
        {{-- @endif --}}
        @csrf
        <div class="group">
            <label for="">First Name</label>
            <input value="{{ old('first_name') }}" type="text" name="first_name">
            <br>
            <small>{{ $errors->first('name') }}</small>
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input value="{{ old('surname') }}" type="text" name="surname">
            <br>
            <small>{{ $errors->first('surname') }}</small>
        </div>
        <div class="group">
            <label for="">Eamil</label>
            <input value="{{ old('email[]') }}" type="email" name="email[]">
            <i class="fa-solid fa-plus" onclick="addNewEmail()"></i>
            <br>
            <small>{{ $errors->first('email[]') }}</small>
        </div>
        <div id="add-new-email"></div>
        <div class="group">
            <label for="">Gender</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="group">
            <label for="">Bitrthday</label>
            <input value="{{ old('birthday') }}" type="date" name="birthday">
            <br>
            <small>{{ $errors->first('birthday') }}</small>
        </div>
        <div class="group">
            <label for="">Company</label>
            <input value="{{ old('company') }}" type="text" name="company">
            <br>
            <small>{{ $errors->first('company') }}</small>
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input value="{{ old('job_title') }}" type="text" name="job_title">
            <br>
            <small>{{ $errors->first('job_title') }}</small>
        </div>
        <div class="group">
            <label for="">Phone Number</label>
            <input value="{{ old('phone_number[]') }}" type="number" name="phone_number[]">
            <i class="fa-solid fa-plus" onclick="addNewPhoneNumber()"></i>
            <br>
            <small>{{ $errors->first('phone_number[]') }}</small>
        </div>
        <div id="add-new-phone-number"></div>
        <div class='button'>
            <button type="submit">save</button>
        </div>
    </form>
    <section class="change-avatar hidden" id="section.change-avatar">
        <div class="overlay" onclick="this.parentNode.classList.add('hidden')"></div>
        <img src="{{ asset('assets/images/team-4.jpg') }}" alt="" id="avatar_image_big">

    </section>
    <script>
        // document.getElementById('avatar').onchage = function () {
        //     this.value 
        // }
    </script>
</x-layout>
