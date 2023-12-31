@extends('admin.layouts.main')

@section('content-admin')
<div class="container-xl">			    
  <h1 class="app-page-title">Settings</h1>
  <div class="row g-4 settings-section mb-5">
    <div class="col-12 col-md-12">
      <div class="app-card app-card-settings shadow-sm p-4">
        <div class="app-card-body">
          <form class="settings-form">
            <div class="mb-3">
              <label for="setting-input-1" class="form-label">Business Name
                <span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info.">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                  <circle cx="8" cy="4.5" r="1"/>
                  </svg>
                </span>
              </label>
              <input type="text" class="form-control" id="setting-input-1" value="Lorem Ipsum Ltd." required>
            </div>
            <div class="mb-3">
              <label for="setting-input-2" class="form-label">Contact Name</label>
              <input type="text" class="form-control" id="setting-input-2" value="Steve Doe" required>
            </div>
            <div class="mb-3">
              <label for="setting-input-3" class="form-label">Business Email Address</label>
              <input type="email" class="form-control" id="setting-input-3" value="hello@companywebsite.com">
            </div>
            <button type="submit" class="btn app-btn-primary" >Save Changes</button>
          </form>
        </div> 
      </div>
    </div>
  </div>
  <div class="app-card app-card-orders-table shadow-sm mb-5">
    <div class="app-card-body">
      <div class="table-responsive">
        <table class="table app-table-hover mb-0 text-left">
          <thead>
            <tr>
              <th class="cell">Order</th>
              <th class="cell">Product</th>
              <th class="cell">Customer</th>
              <th class="cell">Date</th>
              <th class="cell">Status</th>
              <th class="cell">Total</th>
              <th class="cell"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="cell">#15346</td>
              <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
              <td class="cell">John Sanders</td>
              <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
              <td class="cell"><span class="badge bg-success">Paid</span></td>
              <td class="cell">$259.35</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>
            <tr>
              <td class="cell">#15345</td>
              <td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
              <td class="cell">Dylan Ambrose</td>
              <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
              <td class="cell"><span class="badge bg-warning">Pending</span></td>
              <td class="cell">$96.20</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>
            <tr>
              <td class="cell">#15344</td>
              <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
              <td class="cell">Teresa Holland</td>
              <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
              <td class="cell"><span class="badge bg-success">Paid</span></td>
              <td class="cell">$123.00</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>

            <tr>
              <td class="cell">#15343</td>
              <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
              <td class="cell">Jayden Massey</td>
              <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
              <td class="cell"><span class="badge bg-success">Paid</span></td>
              <td class="cell">$199.00</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>

            <tr>
              <td class="cell">#15342</td>
              <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
              <td class="cell">Reina Brooks</td>
              <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
              <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
              <td class="cell">$59.00</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>

            <tr>
              <td class="cell">#15341</td>
              <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
              <td class="cell">Raymond Atkins</td>
              <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
              <td class="cell"><span class="badge bg-success">Paid</span></td>
              <td class="cell">$678.26</td>
              <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--//table-responsive-->
    </div>
    <!--//app-card-body-->
  </div>
  <nav class="app-pagination">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
@endsection