import { useEffect, useRef } from "react";
import { useGLTF, useAnimations } from "@react-three/drei";

export function Model(props) {
  const ref = useRef();
  const { scene, animations } = useGLTF("model/smk.glb");
  const { actions } = useAnimations(animations, ref);
  useEffect(() => {
    actions["logoAction"].play();
  },[actions]);
  return (
    <mesh {...props} ref={ref} scale={2}  position={[0, 0, 0]} rotation={[0, 0, 0]}>
      <primitive object={scene} />
    </mesh>
  );
}