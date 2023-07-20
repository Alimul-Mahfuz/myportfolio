<x-admin-layout>
    @section('pagename')
        Education page
    @endsection
    @section('breadcrumb')
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Education</li>
            </ol>
        </div><!-- /.col -->
    @endsection
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary text-center px-5 ml-2" data-toggle="modal"
            data-target="#exampleModal">
            Add New
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Education</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="degree_name">Degree Name</label>
                                    <input type="text" class="form-control" id="degree_name" name="degree_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="institution_name">Institution Name</label>
                                    <input type="text" class="form-control" id="institution_name"
                                        name="institution_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="major">Major</label>
                                    <input type="text" class="form-control" id="major" name="major">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="minor">Minor</label>
                                    <input type="text" class="form-control" id="minor" name="minor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="institution_address">Institution Address</label>
                                <input type="text" class="form-control" id="institution_address"
                                    name="institution_address" placeholder="institution_address">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cgpa">CGPA</label>
                                    <input type="text" class="form-control" id="cgpa" name="cgpa">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="scale">Scale</label>
                                    <input type="text" class="form-control" id="scale" name="scale">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="passing_year">Passing Year</label>
                                    <input type="text" class="form-control" id="passing_year" name="passing_year">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-admin-layout>
