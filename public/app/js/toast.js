function successNotice(body = 'Thao tác thành công', title = 'Thông báo', subtitle = '') {
    $(document).Toasts('create', {
        class: 'bg-success',
        positionClass: 'toast-top-center',
        title: title,
        subtitle: subtitle,
        body: body
    })
}

function infoNotice(body = 'Thao tác thành công', title = 'Thông báo', subtitle = '') {
    $(document).Toasts('create', {
        class: 'bg-info',
        title: title,
        subtitle: subtitle,
        body: body
    })
}

function warningNotice(body = 'Thao tác thành công', title = 'Thông báo', subtitle = '') {
    $(document).Toasts('create', {
        class: 'bg-warning',
        title: title,
        subtitle: subtitle,
        body: body
    })
}

function dangerNotice(body = 'Thao tác thành công', title = 'Thông báo', subtitle = '') {
    $(document).Toasts('create', {
        class: 'bg-danger',
        title: title,
        subtitle: subtitle,
        body: body
    })
}

function maroonNotice(body = 'Thao tác thành công', title = 'Thông báo', subtitle = '') {
    $(document).Toasts('create', {
        class: 'bg-maroon',
        title: title,
        subtitle: subtitle,
        body: body
    })
}
