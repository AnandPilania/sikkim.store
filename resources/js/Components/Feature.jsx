import React from 'react';

const Feature = ({icon, title, description, gradient}) => {
    return (
        <div className="p-8 rounded-md bg-white">
            <div
                className={`mb-4 flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br ${gradient} text-white shadow`}>
                {icon}
            </div>
            <h4 className="text-base leading-none font-semibold text-gray-700">
                {title}
            </h4>
            {description}
        </div>
    );
};

export default Feature;
