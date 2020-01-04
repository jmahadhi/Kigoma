<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registed Quarter Year</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateQuarter">
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
                      <th>Code</th>
                      <th>Financial Year</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td> 001</td>
                      <td>2021/2022</td>
                      <td>Quarter One</td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fas fa-lock"></i>
                          </a>
                      </td>
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
                      <td> 002</td>
                      <td>2021/2022</td>
                      <td>Quarter Two</td>
                       <td>
                          <a href="#">
                              <i class="nav-icon fas fa-lock-open"></i>
                          </a>
                      </td>
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
        <div class="modal fade" id="CreateQuarter" tabindex="-1" role="dialog" aria-labelledby="CreateQuarterModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateQuarterModal">Add Unit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-sort-numeric-up"></i>
                                </span>
                            </div>
                            <input v-model="form.firstName" type="text" name="quarterCode" 
                                 placeholder="Enter Organisation Code"
                                 class="form-control" :class="{ 'is-invalid': form.errors.has('quarterCode') }">
                        <has-error :form="form" field="quarterCode"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <input v-model="form.middleName" type="text" name="quarterName"
                                placeholder="Enter Organisation Name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('quarterName') }">
                        <has-error :form="form" field="quarterName"></has-error>
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-info-circle"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="financialYearId" name="financialYearId">
                                    <option>Select Financial Year</option>
                                    <option value="1">2020/2021</option>
                                    <option value="2">2021/2022</option>
                                    <option value="3">2022/2023</option>
                                </select>
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
                    quarterCode: '',
                    quarterName: '',
                    financialYearId: ''

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
