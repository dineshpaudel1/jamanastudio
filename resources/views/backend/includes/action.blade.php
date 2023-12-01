<div class="bedit">
    @if(!empty($params['show']))
        <a class="btn  btn-success" href="{{ route($params['base_route'].'.show', ['id' => $params['id']]) }}"
           title="View Details"><span class="mdi mdi-eye"></span></a>
    @endif
    @if(!empty($params['edit']))
        <a class="btn  btn-warning" href="{{ route($params['base_route'].'.edit', ['id' =>$params['id']]) }}"
           title="Edit"><span class="mdi mdi-square-edit-outline"></span></a>
    @endif
    @if(!empty($params['delete']))
        {!! Form::open(['route' => [$params['base_route'].'.delete', $params['id']], 'data-id'=> $params['id'], 'class' => 'form-inline custom_delete form-delete', 'onsubmit' => 'handleTypeDelete(event)', 'method' => 'delete']) !!}
        <button type="submit" class="btn btn-danger" title="Delete" id="sa-params"><span
                class="mdi mdi-delete-sweep-outline"></span></button>
        {!! Form::close() !!}
    @endif
</div>
