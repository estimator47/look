@foreach($messages as $message)
    <tr class="<?= ($message->bold==0)?'bolt_text':'' ?>">
        <td>
            {{$message->name}}
        </td>
        <td>
            {{$message->email}}
        </td>
        <td>
            {{$message->phone}}
        </td>
        <td>
            {{$message->address}}
        </td>
        <td>
            <?=substr($message->message, 0, 80); ?>...
        </td>
        <td>
            {{$message->created_at}}
        </td>
        <td>
            <a href="{{url('/message_single', [$message->id])}}" class="btn btn-tbl-edit btn-xs">
                <i class="fa fa-eye"></i>
            </a>
            <div>
                <button class="btn btn-tbl-delete btn-xs" id="{{$message->id}}">
                    <i class="fa fa-trash-o "></i>
                </button>
            </div>
        </td>
    </tr>
@endforeach
