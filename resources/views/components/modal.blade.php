@props(['project'])

<!-- Modal -->
<div class="modal fade" id="m{{$project->id}}" tabindex="-1" aria-labelledby="m{{$project->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="m{{$project->id}}Label">Delete Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to permanently delete this project?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO, keep it!</button>
        <form action="{{route('projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">YES, Delete!</button>
        </form>
      </div>
    </div>
  </div>
</div>