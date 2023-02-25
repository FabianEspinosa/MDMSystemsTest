import { Link, Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../context/ContextProvider";

export default function DefaultLayout() {
    const { user, token } = useStateContext();
    if (!token) {
        return <Navigate to="/login" />;
    }
    const onLogout = (ev) => {
        ev.PreventDefautl();
    };
    return (
        <div id="defaultLayout">
            <aside>
                <Link to="/dashboard">Dashboard</Link>
                <Link to="/users">Usuarios</Link>
            </aside>
            <div className="content">
                <header>
                    <div>HEAD</div>
                    <div>
                        {user.name}
                        <a className="btn-logout" onClick={onLogout} href="#">
                            Logout
                        </a>
                    </div>
                </header>
                <main>
                    <Outlet />
                </main>
            </div>
        </div>
    );
}
