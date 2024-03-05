import React, {Suspense, useState} from 'react';
import ReactDOM from 'react-dom';
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";
import {Model as Book} from "../models/Book";



export default function Index() {
    return (
        <div className=''>
            <div className='circlePosition w-[200px] h-[200px] lg:w-[500px] lg:h-[400px] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-[100%] absolute z-1 blur-[90px]'>

            </div>
            <div className='grid grid-cols-1 md:grid-cols-2 place-items-center items-center translate-y-[50%]'>
                <div className="mx-10 my-10">
                    <h5 className="mb-2 text-xl lg:text-3xl font-bold tracking-tight text-white uppercase">Buku Tamu Digital</h5>
                    <p className="text-sm lg:font-normal text-gray-700 dark:text-gray-400">135, Jl. Ahmad Yani, South Kramat</p>
                    <p className="text-sm lg:font-normal text-gray-700 dark:text-gray-400">Magelang Utara, Magelang City</p>
                    <p className="text-sm lg:font-normal mb-7 text-gray-700 dark:text-gray-400">Central Java 59155</p>
                    <a href="#pendaftaran" className="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i className="mdi mdi-text-box-edit-outline"></i> Daftar</a>
                    <a href="#tutorial" className="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i className="mdi mdi-book-open-variant"></i> Tutorial</a>
                </div>
                <div>
                    <Canvas>
                    <OrbitControls />
                    <ambientLight intensity={0.5} />
                    <directionalLight position={[0, 0, 1]} intensity={3} />
                    <Suspense fallback={null}>
                        <Book />
                    </Suspense>
                    </Canvas>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}