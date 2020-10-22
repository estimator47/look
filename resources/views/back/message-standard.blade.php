@foreach($messages as $message)

<tr class="<?= ($message->bold==0)?'bolt_text':'' ?>" style="text-align: center;">
<td>{{$message->name}}</td>
<td>{{$message->email}}</td>
<td><a href="{{url('/messagesingle', [$message->id])}}" class="fulltext boldtext" style="cursor: pointer;"><?=substr($message->message, 0, 80); ?>...</a></td>
<td>{{$message->created_at}}</td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$message->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="bold" style="display: none;">{{$message->bold}}</td>
</tr>
@endforeach
