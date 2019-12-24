<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Organisation Unit</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateOrganUnit">
                        <i class="nav-icon fas fa-user-plus"></i>
                        Add New
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Organisation Level</th>
                      <th>Unit Code</th>
                      <th>Organisation Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                       <td>Tanzania</td>
                      <td> OgCode01</td>
                      <td>National</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>

                     <tr>
                      <td>183</td>
                       <td>Kigoma</td>
                      <td> OgCode02</td>
                      <td>Regional</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>

                     <tr>
                      <td>183</td>
                       <td>Buhigwe DcCreateOrganUnit</td>
                      <td> OgCode03</td>
                      <td>District</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>

                    <tr>
                      <td>184</td>
                       <td>Buhigwe</td>
                      <td> OgCode04</td>
                      <td>LGA</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-edit green"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

                <!-- Modal -->
        <div class="modal fade" id="CreateOrganUnit" tabindex="-1" role="dialog" aria-labelledby="CreateOrganUnitModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateOrganUnitModal">Add Unit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                </span>
                            </div>
                            <select class="form-control" id="UserRole" name="organisationName">
                                <option>Select Organisation Name</option>
                                <option value="1">Tanzania</option>
                                <option value="2">Dar Es Salaam</option>
                                <option value="3">Mbeya</option>
                                <option value="4">Kigoma</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                            <input v-model="form.firstName" type="text" name="organLevelCode" 
                                 placeholder="Enter Organisation Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('organLevelCode') }">
                        <has-error :form="form" field="organLevelCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <input v-model="form.middleName" type="text" name="orgName"
                                placeholder="Enter Organisation Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('orgName') }">
                        <has-error :form="form" field="orgName"></has-error>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="nav-icon fas fa-window-close fa-fw"></i>Close</button>
                    <button type="button" class="btn btn-primary">
                        <i class="nav-icon fas fa-save fa-fw"></i>Create</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form : new Form({
                    organLevelCode: '',
                    orgName: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
