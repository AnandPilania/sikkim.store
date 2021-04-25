import React from 'react';

const Feature = ({icon, title, description, gradient}) => {
    return (
        <div className="relative shadow px-8 pt-12 pb-8 rounded-md bg-gray-50">
            <div className="absolute top-0 transform -translate-y-1/2 flex-shrink-0">
                <div className={`flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-br ${gradient} text-white shadow`}>
                    {icon}
                </div>
            </div>
            <div>
                <h4 className="text-base leading-none font-semibold text-gray-700">
                    {title}
                </h4>
                {description}
            </div>
        </div>
    );
};

export default Feature;
