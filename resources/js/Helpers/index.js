import {usePage} from "@inertiajs/inertia-react";

const asset = (filePath) => {
    return `${usePage().props.env.assetUrl}/${filePath}`
}

export {asset}
