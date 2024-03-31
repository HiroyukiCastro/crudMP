/**
 * Función para mostrar la modal de detalles del empleado
 */
async function verDetallesEmpleado(idEmpleado) {
  try {
    // Ocultar la modal si está abierta
    const existingModal = document.getElementById("detalleEmpleadoModal");
    if (existingModal) {
      const modal = bootstrap.Modal.getInstance(existingModal);
      if (modal) {
        modal.hide();
      }
      existingModal.remove(); // Eliminar la modal existente
    }

    // Buscar la Modal de Detalles
    const response = await fetch("modales/modalDetalles.php");
    if (!response.ok) {
      throw new Error("Error al cargar la modal de detalles del empleado");
    }
    const modalHTML = await response.text();

    // Crear un elemento div para almacenar el contenido de la modal
    const modalContainer = document.createElement("div");
    modalContainer.innerHTML = modalHTML;

    // Agregar la modal al documento actual
    document.body.appendChild(modalContainer);

    // Mostrar la modal
    const myModal = new bootstrap.Modal(
      modalContainer.querySelector("#detalleEmpleadoModal")
    );
    myModal.show();

    await cargarDetalleEmpleado(idEmpleado);
  } catch (error) {
    console.error(error);
  }
}

/**
 * Función para cargar y mostrar los detalles del empleado en la modal
 */
async function cargarDetalleEmpleado(idEmpleado) {
  try {
    const response = await axios.get(
      `acciones/detallesEmpleado.php?id=${idEmpleado}`
    );
    if (response.status === 200) {
      console.log(response.data);
      const { carpeta, citado, direccion, investigado, delito, agraviado, disposicion, disposionnumero, fecha} =
        response.data;

      // Limpiar el contenido existente de la lista ul

      const ulDetalleEmpleado = document.querySelector(
        "#detalleEmpleadoContenido ul"
      );

      ulDetalleEmpleado.innerHTML = ` 
       
      <li class="list-group-item"><b>carpeta:</b> 
          ${carpeta ? carpeta : "No disponible"}
        </li>
        
        <li class="list-group-item"><b>citado:</b> 
          ${citado ? citado : "No disponible"}
        </li>
       
        <li class="list-group-item"><b>direccion:</b> 
          ${direccion ? direccion : "No disponible"}
        </li>
       
        <li class="list-group-item"><b>investigado:</b>
         ${investigado ? investigado : "No disponible"}
        </li>
       
        <li class="list-group-item"><b>delito:</b>
         ${delito ? delito : "No disponible"
        }</li>
       
        <li class="list-group-item"><b>agraviado:</b> 
          ${agraviado ? agraviado : "No disponible"}
        </li>

        <li class="list-group-item"><b>disposicion:</b> 
          ${disposicion ? disposicion : "No disponible"}
        </li>

        <li class="list-group-item"><b>disposionnumero:</b> 
          ${disposionnumero ? disposionnumero : "No disponible"}
        </li>

        <li class="list-group-item"><b>fecha:</b> 
          ${fecha ? fecha : "No disponible"}
        </li>

      `;
    } else {
      alert(`Error al cargar los detalles del empleado con ID ${idEmpleado}`);
    }
  } catch (error) {
    console.error(error);
    alert("Hubo un problema al cargar los detalles del empleado");
  }
}