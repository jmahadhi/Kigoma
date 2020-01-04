<template>
    <div class="container pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registed Group</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#CreateGroupDetail">
                        <i class="nav-icon fas fa-plus"></i>
                        Add New
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Reg. ID</th>
                      <th>Group Name</th>
                      <th>Type</th>
                      <th>Ward</th>
                      <th>Village</th>
                      <th>Register Member</th>
                      <th>Group Member List</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>Wakiber</td>
                      <td>Wanawaka</td>
                      <td>Kibwigwa</td>
                      <td>Kinje</td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#RegisterMember">
                            <i class="nav-icon fas fa-registered"></i> Register</button>
                      </td>
                      <td>
                           <router-link to="/previewMember">
                             <button class="btn btn-info">
                                <i class="nav-icon fab fa-monero"></i> Member</button>
                          </router-link>
                      </td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-eye" data-toggle="tooltip" data-placement="left" title="View Details"></i>
                          </a> |
                          <a href="#">
                              <i class="nav-icon fa fa-edit green" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red" data-toggle="tooltip" data-placement="right" title="Delete"></i>
                          </a>
                      </td>
                    </tr>

                    <tr>
                      <td>183</td>
                      <td>Wakiber</td>
                      <td>Vijana</td>
                      <td>Kibwigwa</td>
                      <td>Kinje</td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#RegisterMember">
                            <i class="nav-icon fas fa-registered"></i> Register</button>
                      </td>
                      <td>
                           <router-link to="/previewMember">
                             <button class="btn btn-info">
                                <i class="nav-icon fab fa-monero"></i> Member</button>
                          </router-link>
                      </td>
                      <td>
                          <a href="#">
                              <i class="nav-icon fa fa-eye" data-toggle="tooltip" data-placement="left" title="View Details"></i>
                          </a> |
                          <a href="#">
                              <i class="nav-icon fa fa-edit green" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red" data-toggle="tooltip" data-placement="right" title="Delete"></i>
                          </a>
                      </td>
                    </tr>

                    <tr>
                      <td>183</td>
                      <td>Wakiber</td>
                      <td>Walemavu</td>
                      <td>Kibwigwa</td>
                      <td>Kinje</td>
                      <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#RegisterMember">
                            <i class="nav-icon fas fa-registered"></i> Register</button>
                      </td>
                      <td>
                           <router-link to="/previewMember">
                             <button class="btn btn-info">
                                <i class="nav-icon fab fa-monero"></i> Member</button>
                          </router-link>
                      </td>
                      <td>
                          <router-link to="./previewMember">
                              <i class="nav-icon fa fa-eye" data-toggle="tooltip" data-placement="left" title="View Details"></i>
                          </router-link> |
                          <a href="#">
                              <i class="nav-icon fa fa-edit green" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                          </a> |
                          <a href="#" >
                              <i class="nav-icon fa fa-trash red" data-toggle="tooltip" data-placement="right" title="Delete"></i>
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

          <!-- Modal for Create Group Details -->
        <div class="modal fade" id="CreateGroupDetail" tabindex="-1" role="dialog" aria-labelledby="CreateGroupDetailModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateGroupDetailModal">Add Group </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-sort-numeric-up"></i>
                                    </span>
                                </div>
                                <input v-model="form.firstName" type="text" name="regId" 
                                    placeholder="Enter Group Reg. Number"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('regId') }">
                                <has-error :form="form" field="regId"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-users"></i>
                                    </span>
                                </div>
                                <input v-model="form.firstName" type="text" name="groupName" 
                                    placeholder="Enter Group Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('groupName') }">
                                <has-error :form="form" field="groupName"></has-error>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group mr-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-users"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="DesignatedWard" name="DesignatedWard">
                                    <option>Select Group Ward</option>
                                    <option value="1">Kibwiga</option>
                                    <option value="2">Kibande</option>
                                    <option value="3">Nyankoro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-users"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="Village" name="Village">
                                    <option>Select Village/Streat</option>
                                    <option value="1">Nyamti</option>
                                    <option value="2">Kavomo</option>
                                    <option value="3">Kilole</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mr-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-user-tag"></i>
                                </span>
                            </div>
                            <select class="form-control" id="GroupType" name="GroupType">
                                <option>Select Group Type</option>
                                <option value="1">Women</option>
                                <option value="2">Youth</option>
                                <option value="3">With Disabilities</option>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="nav-icon fas fa-puzzle-piece"></i>
                                </span>
                            </div>
                            <textarea v-model="form.middleName" type="text" name="groupAddress"
                                placeholder="Enter Group Address"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('groupAddress') }"></textarea>
                             <has-error :form="form" field="groupAddress"></has-error>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="nav-icon fas fa-paperclip"></i>
                            </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
        <!-- end here Modal for register Group--->

        <!--- start of Modal for register Member in a given Group-->
        <div class="modal fade" id="RegisterMember" tabindex="-1" role="dialog" aria-labelledby="RegisterMemberModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="RegisterMemberModal">Add Member in A Group: [Group Name] </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user"></i>
                                    </span>
                                </div>
                                <input v-model="form.FullName" type="text" name="FullName" 
                                    placeholder="Enter Member Full Name"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('FullName') }">
                                <has-error :form="form" field="FullName"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user-tag"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="gender" name="gender">
                                    <option>Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                                <input v-model="form.date" placeholder="dd/mm/yyyy" type="text" class="form-control" data-inputmask-alias="datetime" 
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                             </div>
                        </div>
                       

                         <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-sort-numeric-up"></i>
                                    </span>
                                </div>
                                <input v-model="form.phoneNumber" type="number" name="phoneNumber" 
                                    placeholder="Enter Phone Number"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('phoneNumber') }">
                                <has-error :form="form" field="phoneNumber"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                       <i class="nav-icon fas fa-text-height"></i>
                                    </span>
                                </div>
                                <textarea v-model="form.PhyAddress" type="number" name="PhyAddress" 
                                    placeholder="Enter Physcial Address"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('PhyAddress') }"></textarea>
                                <has-error :form="form" field="PhyAddress"></has-error>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nav-icon fas fa-user-tag"></i>
                                    </span>
                                </div>
                                <select class="form-control" id="MemberRole" name="MemberRole">
                                    <option>Select Member Role</option>
                                    <option value="1">ChairMan</option>
                                    <option value="2">Treasurer</option>
                                    <option value="3">Secretary</option>
                                    <option value="4">Member</option>
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
        <!-- end here -->
    </div>
</template>

<script>
    // This for display tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

     //Datemask dd/mm/yyyy
    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    
    export default {
        data() {
            return {
                form : new Form({
                    regId: '',
                    fnName: '',

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
