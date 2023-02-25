import { Link } from "react-router-dom";

export default function Login() {
    const onSubmit = (ev) => {
        ev.preventDefault();
    };
    return (
        <div className="login-signup-form animated fadeInDown">
            <div className="form">
                <form onSubmit={onSubmit}>
                    <h1 className="title">Ingresa a tu cuenta</h1>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button className="btn btn-block">Login</button>
                    <p className="message">
                        Aún no estas registrado?{" "}
                        <Link to="/signup">Crea una cuenta</Link>
                    </p>
                </form>
            </div>
        </div>
    );
}
