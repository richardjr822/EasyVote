import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { 
  faShieldAlt, 
  faTachometerAlt, 
  faUsers, 
  faBox, 
  faChartBar, 
  faCog, 
  faQuestionCircle, 
  faUser 
} from '@fortawesome/free-solid-svg-icons';

const AdminSidebar = () => {
  return (
    <div className="bg-primary text-white position-fixed h-100 overflow-hidden" 
         style={{width: '80px', transition: 'all 0.3s'}}
         onMouseEnter={(e) => e.currentTarget.style.width = '16rem'}
         onMouseLeave={(e) => e.currentTarget.style.width = '80px'}>
      
      <div className="p-3 d-flex align-items-center justify-content-center border-bottom border-primary">
        <FontAwesomeIcon icon={faShieldAlt} className="fs-4" />
        <span className="ms-2 fs-5 fw-bold d-none" style={{display: 'none'}}>Admin</span>
      </div>
      
      <nav className="mt-4">
        <div className="px-3">
          <div className="text-uppercase text-info small fw-semibold d-none">Main</div>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded bg-primary bg-opacity-75 text-white mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faTachometerAlt} />
            <span className="ms-3 d-none">Dashboard</span>
          </a>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded text-white-50 hover-bg-primary hover-bg-opacity-75 mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faUsers} />
            <span className="ms-3 d-none">Users</span>
          </a>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded text-white-50 hover-bg-primary hover-bg-opacity-75 mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faBox} />
            <span className="ms-3 d-none">Products</span>
          </a>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded text-white-50 hover-bg-primary hover-bg-opacity-75 mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faChartBar} />
            <span className="ms-3 d-none">Analytics</span>
          </a>
        </div>
        
        <div className="px-3 mt-4">
          <div className="text-uppercase text-info small fw-semibold d-none">Settings</div>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded text-white-50 hover-bg-primary hover-bg-opacity-75 mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faCog} />
            <span className="ms-3 d-none">Settings</span>
          </a>
          
          <a href="#" className="d-flex align-items-center py-2 px-2 rounded text-white-50 hover-bg-primary hover-bg-opacity-75 mt-2 text-decoration-none">
            <FontAwesomeIcon icon={faQuestionCircle} />
            <span className="ms-3 d-none">Help</span>
          </a>
        </div>
      </nav>
      
      <div className="position-absolute bottom-0 w-100 p-3">
        <div className="d-flex align-items-center">
          <div className="rounded-circle bg-primary bg-opacity-50 d-flex align-items-center justify-content-center" style={{width: '32px', height: '32px'}}>
            <FontAwesomeIcon icon={faUser} />
          </div>
          <div className="ms-3 d-none">
            <div className="small">Admin User</div>
            <div className="text-info small">admin@example.com</div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default AdminSidebar;
