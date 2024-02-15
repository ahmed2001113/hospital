{{-- <div>
    <div class="main-chat-list" id="ChatList">
        @foreach($conversations as $conversation)
            <div class="media new"
                 wire:click="chatUserSelected({{ $conversation }},'{{ $this->getUsers($conversation,$id='conversation')}}')">
                <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{$this->getUsers($conversation,$name=null)}}</span> --}}
                        {{-- وقت الرساله الاخيره و الفانكشن الي في الاخر دي علشان يعرضه بطريقه احسن --}}
                        {{-- <span>{{$conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}}</span>
                    </div>
                    <p>{{$conversation->messages->last()->body}}</p>
                </div>
            </div>
        @endforeach
    </div><!-- main-chat-list -->
</div> --}}
<div>
    <div class="main-chat-list" id="ChatList">
        @foreach($conversations as $conversation)
            <div class="media new"
                 wire:click="chatUserSelected({{ $conversation }},'{{ $this->getUsers($conversation,$name='id')}}')">
                <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{$this->getUsers($conversation,$name='name')}}</span>
                        <span>{{$conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}}</span>
                    </div>
                    <p>{{$conversation->messages->last()->body}}</p>
                </div>
            </div>
        @endforeach
    </div><!-- main-chat-list -->
</div>
