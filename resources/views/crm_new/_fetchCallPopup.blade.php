<div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="width:100%;">
                                             <div class="toast-header">
                                                <i class="mdi mdi-circle-slice-8 font-18 mr-1 text-warning"></i>
                                                <strong class="mr-auto"><label id="runtime" class="mt-3">00:00:00</label></strong>
                                                <small class="text-muted"></small>
                                             </div>
                                             <div class="toast-body">
                                                <form action="http://kafesta.com/crmnest/call/store" method="post">
                                                   <input type="hidden" name="_token" value="jUcVmOjPm7L4O80vksyEgNVZKp5e6ApX6fdKCuF2">                                                            <input type="hidden" name="lead_id" value="{{$todo->id}}" id="lead_id">
                                                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}" id="user_id">
                                                   <textarea class="form-control" rows="3" id="call_note_text" name="call" placeholder="Your Notes.." disabled=""></textarea>
                                                   <div class="timer"><button class="categories btn btn-danger btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="button" id="stopcall">Stop Call</button></div>
                                                   <div class="float-left all_tags"><span>Not receive</span> <span>Call later</span></div>
                                                   <button class="categories btn btn-blue btn-square waves-effect waves-light mt-2 btn-sm create-note-button float-right mb-2" type="submit" id="startcall">Start Call</button>
                                                </form>
                                             </div>
                                          </div>