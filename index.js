// PETICION GET
((c, d) => {
  const main = d.querySelector('#main')
  const consulta = (query, template, element) => {
    fetch(query)
      .then(response => response.json())
      .then(response => {
        Array.from(response).map(rs => {
          element.insertAdjacentHTML('beforeend', template(rs))
        })
      })
  }
  let templateHtml = (cd) => {
    return `
      <h5>${cd.cedula}</h5>
      <p>${cd.nombre}</p>
      <button type="button" class="btn btn-primary" id="editBtn" data-id="${cd.cedula}">Editar</button>
      <button type="button" class="btn btn-danger" id="deleteBtn" data-id="${cd.cedula}">Eliminar</button>
      <hr>`
  }
  consulta("select.php", templateHtml, main)
})(console.log, document);

// PETICION POST
((c, d) => {
  const formulario = d.getElementById('send_btn')
  const consultaPost = (data, tpl) => {
    let result = ``;
    fetch('request.php', {
      method: 'POST',
      headers : new Headers({"Content-Type": "application/x-www-form-urlencoded"}),
      body: data,
      mode:"cors"
    })
      .then(response => {
        return response.text()
      })
      .then(text => {
        tpl.insertAdjacentHTML('beforeend', text)
      })
      .catch(err => {
        result=err.message
      })
  }
  formulario.addEventListener('click', e => {
    e.preventDefault()
    const main = d.querySelector('#main2')
    let formsElements = d.querySelectorAll('[required]'),
      formData

    formsElements.forEach( input => formData += `${input.name}=${input.value}&` )
    consultaPost( encodeURI(formData), main )
  })
})(console.log, document);

//PETICION DELETE
((c, d) => {
  const formulario = d.forms[1]

  const eliminar = id => {
    let result = ``;
    fetch('delete.php', {
      method: 'POST',
      headers : new Headers({"Content-Type": "application/x-www-form-urlencoded"}),
      body: id,
      mode:"cors"
    })
      .then(response => {
        return response.text()
      })
      .then(text => {
        result = text
        return text
      })
      .catch(err => {
        result=err
      })
  }

  formulario.addEventListener('submit', e => {
    e.preventDefault()

    const id = e.target[0].value
    let formsElements = d.getElementById('cedulaDelete'),
      formData = `${formsElements.name}=${formsElements.value}`

    eliminar( encodeURI(formData) )
  })
})(console.log, document);

//PETICION GET_ONE
((c, d) => {
  const main = d.getElementById('main'),
    formAdd = d.getElementById('contentBtn'),
    send_btn = d.getElementById('send_btn'),
    edit_btn = d.getElementById('edit_btn')

  const selectOneData = (query, id) => {
    var result = {}
    return fetch(query, {
      method : 'POST',
      headers : new Headers({"Content-Type": "application/x-www-form-urlencoded"}),
      mode : 'cors',
      body : id
    })
      .then(response => {
        return response.json()
      })
  }

  const consultaEDIT = (query, data) => {
    c(data)
    let result = {}
    fetch(query, {
      method : 'POST',
      headers : new Headers({"Content-Type": "application/x-www-form-urlencoded"}),
      mode : 'cors',
      body : data
    })
      .then(response => {
        return response.text()
      })
      .then(json => {
        result.text = json
      })
      return result
  }

  //EVENTO PARA OBTENER UNA PERSONA
  main.addEventListener('click', e => {
    const id = e.target.dataset.id
    if( e.target.id === 'editBtn' ){
      let formsElements = d.querySelectorAll('[required]'),
        formData = `id_cedula=${id}`

      formularioEdit = (data) => {
        formsElements[0].disabled = true
        formsElements[0].value = data.cedula
        formsElements[1].value = data.nombre
        formsElements[2].value = data.direccion
        formsElements[3].value = data.telefono
        formsElements[4].value = data.email
        formsElements[5].value = data.password
      }
      edit_btn.style.display = 'block'
      send_btn.style.display = 'none'
      selectOneData('selectOne.php', encodeURI(formData))
        .then(text => {
          formularioEdit(text[0])
        })
    }
  })
  //EVENTO PARA EDITAR
  edit_btn.addEventListener('click', e => {
    e.preventDefault()
    let formsElements = d.querySelectorAll('[required]'),
      formData

    formsElements.forEach( input => formData += `${input.name}=${input.value}&` )
    c(consultaEDIT('edit.php', encodeURI(formData)))
  })
})(console.log, document);