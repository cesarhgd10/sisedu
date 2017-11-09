<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label for="students" class="control-label">Selecionar estudante</label>
                    <select name="students" id="students" class="form-control"></select>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Nome</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="student in students">
                        <td>Excluir</td>
                        <td>{{ student.user.name }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
  import ADMIN_CONFIG from '../../services/adminConfig';
  import store from '../../store/store';
  import 'select2';

  export default {
    props: ['classInformation'],
    computed: {
      students() {
        return store.state.classStudent.students;
      }
    },
    mounted() {
      store.dispatch('classStudent/query', this.classInformation);
      $("#students").select2({
        ajax: {
          url: `${ADMIN_CONFIG.API_URL}/students`,
          dataType: 'json',
          dalay: 250,
          precessResults(data) {

          }
        }
      });

    }
  }

</script>
