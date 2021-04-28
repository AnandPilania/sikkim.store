import {useForm} from "@inertiajs/inertia-react";
import {Spinner} from "@/CustomIcons";
import {CheckCircleIcon} from "@heroicons/react/outline";

const ContactForm = () => {
    const {data, setData, errors, processing, post, reset, clearErrors, recentlySuccessful} = useForm(
        {
            name: '',
            email: '',
            message: ''
        }
    )

    const handleSubmit = (event) => {
        event.preventDefault();
        post(route('contact.store'),
            {
                preserveScroll: true,
                onSuccess: () => {
                    reset();
                    clearErrors()
                }
            }
        )
    }

    return (
        <>
            <form onSubmit={handleSubmit}>
                <div className="relative mb-4">
                    <label htmlFor="name" className="leading-7 text-sm text-gray-600">Name</label>
                    <input
                        id="name"
                        type="text"
                        value={data.name}
                        onChange={event => setData('name', event.target.value)}
                        className={`py-2.5 mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 ${errors.name && 'border-red-600'}`}
                        placeholder="e.g. Man Maya Gurung"
                        autoComplete="name"
                        required
                        autoFocus={true}
                    />
                    {
                        errors.name &&
                        <p className="mt-1 px-0.5 text-xs text-red-600 font-medium">{errors.name}</p>
                    }
                </div>

                <div className="relative mb-4">
                    <label htmlFor="email" className="leading-7 text-sm text-gray-600">Email</label>
                    <input
                        id="email"
                        type="email"
                        value={data.email}
                        onChange={event => setData('email', event.target.value)}
                        className={`py-2.5 mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-green-600 focus:bg-white focus:ring focus:ring-green-300 focus:ring-opacity-20 placeholder-gray-400 ${errors.email && 'border-red-600'}`}
                        placeholder="e.g. mmaya@sikkim.store"
                        autoComplete="email"
                        required
                    />
                    {
                        errors.email &&
                        <p className="mt-1 px-0.5 text-xs text-red-600 font-medium">{errors.email}</p>
                    }
                </div>

                <div className="relative mb-4">
                    <label htmlFor="message" className="leading-7 text-sm text-gray-600">Message</label>
                    <textarea
                        id="message"
                        value={data.message}
                        onChange={event => setData('message', event.target.value)}
                        className={`py-2.5 mt-1 block w-full bg-white rounded-md border border-gray-300 focus:border-green-600 focus:ring focus:ring-green-300 focus:ring-opacity-20 h-32  resize-none leading-6 transition-colors duration-200 ease-in-out placeholder-gray-400 ${errors.message && 'border-red-600'}`}
                        placeholder="Something interesting perhaps"/>
                    {
                        errors.message &&
                        <p className="mt-1 px-0.5 text-xs text-red-600 font-medium">{errors.message}</p>
                    }
                </div>

                <button
                    disabled={processing}
                    type="submit"
                    className="flex items-center justify-center w-full btn btn-default bg-green-600 hover:bg-green-700 py-3 text-white text-sm uppercase">
                    {
                        processing
                            ? <Spinner className="animate-spin h-5 w-5 text-white"/>
                            : <span>Send Message</span>
                    }
                </button>
            </form>
            {
                recentlySuccessful &&
                <div
                    className="w-full fixed top-0 right-0 sm:top-20 sm:right-4 md:rounded-lg shadow box-shadow sm:max-w-sm border border-gray-200 z-10 bg-white">
                    <div className="relative flex items-start p-4">
                        <CheckCircleIcon className="w-5 text-green-600 mr-3 flex-none"/>
                        <div>
                            <p className="font-medium text-sm text-gray-900 mb-1">Successfully sent!</p>
                            <p className="text-xs text-gray-600">Your message has been sent, we'll get in touch.</p>
                        </div>
                    </div>
                </div>

            }
        </>
    )
}

export default ContactForm
