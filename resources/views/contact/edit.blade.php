<x-layout title="create contact">
    <form action="{{ route('contact.update', $contact->id) }}" class="form" method="post">
        @csrf
        @method('put')
        <input type="file" accept="image/*" id="avatar" hidden>
        @if ($contact->avatar)
            <div class="avatar-image " id="image_avatar" style="position: relative">
                <img src="{{ asset('assets/images/team-4.jpg') }}" id="avatar_image" alt=""
                    onclick="document.getElementById('section.change-avatar').classList.remove('hidden')">
                <label for="avatar"><i class="fa-regular fa-pen-to-square"></i></label>
                <i class="fa-solid fa-trash-can remove-avatar" id="remove-avatar" onclick="removeImage()"></i>
            </div>
            <div class="icon hidden" id="avatar_image_default">
                <label for="avatar" style="cursor: pointer"><i class="fas fa-user"></i></label>
            </div>
        @else
            <div class="avatar-image hidden" id="image_avatar" style="position: relative">
                <img src="{{ asset('assets/images/team-4.jpg') }}" id="avatar_image" alt=""
                    onclick="document.getElementById('section.change-avatar').classList.remove('hidden')">
                <label for="avatar"><i class="fa-regular fa-pen-to-square"></i></label>
                <i class="fa-solid fa-trash-can remove-avatar" id="remove-avatar" onclick="removeImage()"></i>
            </div>
            <div class="icon" id="avatar_image_default">
                <label for="avatar" style="cursor: pointer"><i class="fas fa-user"></i></label>
            </div>
        @endif
        <div class="group">
            <label for="">First Name</label>
            <input type="text" value="{{ $contact->first_name }}" name="first_name">
            <br>
            <small>{{ $errors->first('name') }}</small>
        </div>
        <div class="group">
            <label for="">Surname</label>
            <input type="text" value="{{ $contact->surname }}" name="surname">
        </div>
        @foreach ($contact->email as $i => $email)
            <div class="group">
                <label for="">Eamil</label>
                <input type="email" value="{{ $email }}" name="email[]">
                @if ($i == 0)
                    <i class="fa-solid fa-plus" onclick="addNewEmail()"></i>
                @endif
            </div>
        @endforeach

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
            <input type="date" value="{{ $contact->birthday }}" name="birthday">
        </div>
        <div class="group">
            <label for="">Company</label>
            <input type="text" value="{{ $contact->company }}" name="company">
        </div>
        <div class="group">
            <label for="">Job title</label>
            <input type="text" value="{{ $contact->job_title }}" name="job_title">
        </div>
        @foreach ($contact->phone_number as $i => $phone_number)
            <div class="group">
                <label for="">phone number</label>
                <input type="number" value="{{ $phone_number }}" name="phone_number[]">
                @if ($i == 0)
                    <i class="fa-solid fa-plus" onclick="addNewPhoneNumber()"></i>
                @endif
            </div>
        @endforeach
        <div id="add-new-phone-number"></div>
        <div style="text-align: center">
            <button type="submit">update</button>
        </div>
    </form>
    <section class="change-avatar hidden" id="section.change-avatar">
        <div class="overlay" onclick="this.parentNode.classList.add('hidden')"></div>
        <img src="{{ asset('assets/images/team-4.jpg') }}" alt="" id="avatar_image_big">
    </section>

</x-layout>
