@props(['entity'])

<!-- Modal -->
<div class="modal fade" id="m{{$entity->id}}" tabindex="-1" aria-labelledby="m{{$entity->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="m{{$entity->id}}Label">Delete Entity</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to permanently delete this entity?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO, keep it!</button>
        <form action="{{route($entity instanceof App\Models\Project ? 'projects.destroy' : ($entity instanceof App\Models\Types ? 'types.destroy' : 'technologies.destroy'), $entity)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">YES, Delete!</button>
        </form>
      </div>
    </div>
  </div>
</div>