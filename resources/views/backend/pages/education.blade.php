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
            data-target="#addEducationModal">
            Add New
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="addEducationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEducationModalLabel">Add New Education</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="education_form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="degree_name">Degree Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="degree_name" name="degree_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="institution_name">Institution Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="institution_name"
                                        name="institution_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="major">Major <span class="text-danger">*</span> </label>
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
                                    <label for="cgpa">CGPA <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="cgpa" name="cgpa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="scale">Scale <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="scale" name="scale">
                                </div>
                            </div>  
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="passing_year">Passing Year <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="passing_year" name="passing_year">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="passing_month">Passing_month<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="passing_month" name="passing_month">
                                </div>
                            </div>  
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="institution_url">Institution URL<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="institution_url" name="institution_url">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @push('js')
        <script src="{{asset('assets/backend/scripts/education.js')}}"></script>
    @endpush
</x-admin-layout>
