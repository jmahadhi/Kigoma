<template>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List of Organisation Group</h3>

            <div class="card-tools">
              <button class="btn btn-success" @click="newModal">
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
                  <th>Organisation Group Code</th>
                  <th>Organisation Group Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="orgGroup in orgGroups" :key="orgGroup.id">
                  <td>{{orgGroup.id}}</td>
                  <td>{{orgGroup.orgGroupCode}}</td>
                  <td>{{orgGroup.orgGroupName}}</td>
                  <td>
                    <a href="#" @click="editModal(orgGroup)">
                      <i class="nav-icon fa fa-edit green"></i>
                    </a> |
                    <a href="#" @click="deleteOrgGrp(orgGroup.id)">
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
    <div
      class="modal fade"
      id="CreateOrganGrp"
      tabindex="-1"
      role="dialog"
      aria-labelledby="CreateOrganGrpModal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="editmode" id="CreateOrganGrpModal">Update Organisation Group</h5>
            <h5 class="modal-title" v-show="!editmode" id="CreateOrganGrpModal">Add Organisation Group</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form @submit.prevent="editmode ? updateOrgGroup() : CreateOrgGroup()">
            <div class="modal-body">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nav-icon fas fa-sort-numeric-up"></i>
                    </span>
                  </div>
                  <input
                    v-model="form.orgGroupCode"
                    type="text"
                    id="orgGroupCode"
                    name="orgGroupCode"
                    placeholder="Enter Organisation Group Code"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('orgGroupCode') }"
                  />
                  <has-error :form="form" field="orgGroupCode"></has-error>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="nav-icon fas fa-puzzle-piece"></i>
                    </span>
                  </div>
                  <input
                    v-model="form.orgGroupName"
                    type="text"
                    id="orgGroupName"
                    name="orgGroupName"
                    placeholder="Enter Organisation Group Name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('orgGroupName') }"
                  />
                  <has-error :form="form" field="orgGroupName"></has-error>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="nav-icon fas fa-window-close fa-fw"></i>Close
              </button>
              <button type="submit" v-show="editmode" class="btn btn-success">
                <i class="nav-icon fas fa-save fa-fw"></i>Update
              </button>
              <button type="submit" v-show="!editmode" class="btn btn-primary">
                <i class="nav-icon fas fa-save fa-fw"></i>Create
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      orgGroups: {},
      form: new Form({
        id: '',
        orgGroupCode: '',
        orgGroupName: ''
      })
    };
  },
  methods: {
    updateOrgGroup() {
      // console.log('edit mode click')
       this.$Progress.start();
       this.form.put('api/orgGroup/'+this.form.id)
       .then(() =>{
          $('#CreateOrganGrp').modal('hide');
           Swal.fire('Update!', 'Organisation Group has been Updated Successfully!.', 'success');
           this.$Progress.finish();
            Fire.$emit('AfterSubmit');
       })
       .catch(() => {
          this.$Progress.fail();
       })
    },

    editModal(orgGroup) {
      this.editmode = true;
      this.form.reset();
       $('#CreateOrganGrp').modal('show');
       this.form.fill(orgGroup);
    },

    newModal() {
      this.editmode = false;
      this.form.reset();
       $('#CreateOrganGrp').modal('show');
    },

    deleteOrgGrp(id) {
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then(result => {
          // Send Request to the serve
          if (result.value) {
            this.form.delete('api/orgGroup/'+ id).then(() => {
                Swal.fire('Deleted!', 'Organisation Group has been deleted.', 'success');
            Fire.$emit('AfterSubmit');
           }).catch(() => {
                Swal.fire('Failed', 'There is SomeThing Wronge', 'Warning');
            })
          }
         
        });
    },
    getOrgGroup() {
      axios.get('api/orgGroup').then(({ data }) => (this.orgGroups = data));
    },

    CreateOrgGroup() {
      this.$Progress.start();
      this.form
        .post('api/orgGroup')
        .then(() => {
          Fire.$emit('AfterSubmit');
          $('#CreateOrganGrp').modal('hide');

          Toast.fire({
            icon: 'success',
            title: 'Organisation Group Created successfully'
          });

          this.$Progress.finish();
        })
        .catch(() => {});
    }
  },

  created() {
    this.getOrgGroup();
    Fire.$on('AfterSubmit', () => {
      this.getOrgGroup();
    });
  }
};
</script>
