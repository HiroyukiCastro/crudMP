/**
 * Función para mostrar la modal de editar el empleado
 */
async function editarEmpleado(idEmpleado) {
  try {
    // Ocultar la modal si está abierta
    const existingModal = document.getElementById("editarEmpleadoModal");
    if (existingModal) {
      const modal = bootstrap.Modal.getInstance(existingModal);
      if (modal) {
        modal.hide();
      }
      existingModal.remove(); // Eliminar la modal existente
    }

    const response = await fetch("modales/modalEditar.php");
    if (!response.ok) {
      throw new Error("Error al cargar la modal de editar el empleado");
    }
    const modalHTML = await response.text();

    // Crear un elemento div para almacenar el contenido de la modal
    const modalContainer = document.createElement("div");
    modalContainer.innerHTML = modalHTML;

    // Agregar la modal al documento actual
    document.body.appendChild(modalContainer);

    // Mostrar la modal
    const myModal = new bootstrap.Modal(
      modalContainer.querySelector("#editarEmpleadoModal")
    );
    myModal.show();

    await cargarDatosEmpleadoEditar(idEmpleado);
  } catch (error) {
    console.error(error);
  }
}

/**
 * Función buscar información del empleado seleccionado y cargarla en la modal
 */
async function cargarDatosEmpleadoEditar(idEmpleado) {
  try {
    const response = await axios.get(
      `acciones/detallesEmpleado.php?id=${idEmpleado}`
    );
    if (response.status === 200) {
      const { id, carpeta, citado, direccion, investigado, delito, agraviado, disposicion, disposionnumero, fecha} =
        response.data;

      console.log(id, carpeta, citado, direccion, investigado, delito, agraviado, disposicion, disposionnumero, fecha);
      document.querySelector("#idEmpleado").value = id;

      document.querySelector("#carpeta").value = carpeta;
      document.querySelector("#citado").value = citado;
      document.querySelector("#direccion").value = direccion;
      document.querySelector("#investigado").value = investigado;
      document.querySelector("#delito").value = delito;
      document.querySelector("#agraviado").value = agraviado;
      document.querySelector("#disposicion").value = disposicion;
      document.querySelector("#disposionnumero").value = disposionnumero;
      document.querySelector("#fecha").value = fecha;

    }
  } catch (error) {
    console.error(error);
    alert("Hubo un problema al cargar los detalles del empleado");
  }
}

async function actualizarEmpleado(event) {
  try {
    event.preventDefault();

    const formulario = document.querySelector("#formularioEmpleadoEdit");
    // Crear un objeto FormData para enviar los datos del formulario
    const formData = new FormData(formulario);
    const idEmpleado = formData.get("id");

    // Enviar los datos del formulario al backend usando Axios
    const response = await axios.post("acciones/updateEmpleado.php", formData);

    // Verificar la respuesta del backend
    if (response.status === 200) {
      console.log("Empleado actualizado exitosamente");

      // Llamar a la función para actualizar la tabla de empleados
      window.actualizarEmpleadoEdit(idEmpleado);

      //Llamar a la función para mostrar un mensaje de éxito
      if (window.toastrOptions) {
        toastr.options = window.toastrOptions;
        toastr.success("¡El empleado se actualizo correctamente!.");
      }

      setTimeout(() => {
        $("#editarEmpleadoModal").css("opacity", "");
        $("#editarEmpleadoModal").modal("hide");
      }, 600);
    } else {
      console.error("Error al actualizar el empleado");
    }
  } catch (error) {
    console.error("Error al enviar el formulario", error);
  }
}
