<x-layout title="dashbaord">

    <style>
        table {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
            overflow: hidden;
        }

        table tr th {
            color: #fff;
            width: calc(100%/6);
            font-size: 18px;
            background: blue;
            padding: 20px 20px;
            /* display: inline-block; */
        }

        table tr td {
            color: #666;
            width: calc(100%/7);
            font-size: 18px;
            padding: 15px 15px;
            text-wrap: nowrap;
        }

        table tr {
            background: #eeeeeeee;
        }
        
        table tr.background {
            background: #ddd;
        }

        .no-contact {
            color: blue;
            font-size: 65px;
            margin-top: 200px;
            font-weight: 500;
            text-align: center;
            text-transform: capitalize;
        }

        i {
            cursor: pointer;
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-content: center;
            transition: 0.3s;
            /* font-size: 16px; */
        }

        i.show {
            display: flex;
            color: #4CAF50;
            align-items: center;
            border-radius: 5px;
        }

        i.show:hover {

            background: #0080001f;
        }

        i.edit {
            display: flex;
            color: #FF9800;
            align-items: center;
            border-radius: 5px;
            margin: 0 15px;
        }

        i.edit:hover {
            background: #ff980040;
        }

        i.delete {
            display: flex;
            color: #ff0000;
            align-items: center;
            border-radius: 5px;
        }

        i.delete:hover {
            background: #ff000026;
        }
    </style>
    @if (count($contacts))
        <table>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>First Name</th>
                    <th>Sername</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Date Of Add</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $i => $contact)
                    <tr class="{{ $i % 2 == 0 ? 'background' : '' }}">
                        <td>{{ ++$i }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->surname }}</td>
                        <td>{{ $contact->gender }}</td>
                        <td>{{ $contact->birthday }}</td>
                        <td style="font-size: 14px;">{{ (new \Carbon\Carbon())->diffForHumans($contact->created_at) }}
                        </td>
                        <td style="">
                            <div style="display: flex; justify-content:flex-end; align-items:center">
                                {{-- <form action="{{ route('contact.show', $contact->id) }}">
                                    <i class="fa-solid fa-eye show" style='' onclick="this.parentNode.submit()"></i>
                                </form> --}}
                                <form action="{{ route('contact.restore', $contact->id) }}" method="post">
                                @csrf
                                @method('put')
                                    {{-- <i class="fa-solid fa-arrow-rotate-left"></i> --}}
                                    <i class="fa-solid fa-arrow-rotate-left edit" onclick="this.parentNode.submit()"></i>
                                </form>
                                <form action="{{ route('contact.forceDelete', $contact->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <i class="fa-solid fa-trash delete" onclick="this.parentNode.submit()"></i>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-contact">
            not Have any trashed Contact
        </div>
    @endif
    {{-- <x-slot:links>
        <a href="{{ route('contact.create', $user->id) }}" class="style"><span><i class=""></i></span>Create
            Contact</a>
    </x-slot:links> --}}
</x-layout>
